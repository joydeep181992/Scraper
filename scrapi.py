from bs4 import BeautifulSoup
import requests
import re
import sys
import os

from watchdog.observers import Observer
from watchdog.events import FileSystemEventHandler

import time
from img_scrapper import *


path_script = 'wordpress/js/'
path_pages = 'wordpress/pages/'

if not os.path.exists(path_script):
    os.makedirs(path_script)

if not os.path.exists(path_pages):
    os.makedirs(path_pages)

# class FolderCreate:
#     def wordpress(self):
#         # creating the folder for to add the script i.e present in the site
#         path_script = 'wordpress/js/'
#         path_pages = 'wordpress/pages/'

#         # theme_name = ''

#         if not os.path.exists(path_script):
#             os.makedirs(path_script)

#         if not os.path.exists(path_pages):
#             os.makedirs(path_pages)

# ss = FolderCreate()
# ss.wordpress()


# Templating the pages
from jinja2 import Environment, FileSystemLoader
env = Environment(
    loader=FileSystemLoader('templates'),
    autoescape=False
)

# Getting URL's from the command line arguments
default_url = str(sys.argv[1])
home_url = str(sys.argv[2])



# Crawling the html pages 
def html_pages(urlss):
    scrapper_url = urlss
    scrapper_html = requests.get(scrapper_url).text
    # The Scrapper default
    soup = BeautifulSoup(scrapper_html, 'lxml')
    body = soup.find('body')
    return str(body)


# Function to scrap the script files
def script_scrapper(urlss):
    script = requests.get(urlss).text
    scrapper_script = BeautifulSoup(script, 'lxml')
    script_list = scrapper_script.find_all('script', attrs={'src': re.compile('.js')})
    links = []

    for i in script_list:
        if(re.search(r'ajax', str(i))):
            links.append(f'{i.get("src")}')
        elif re.search(r'assets', str(i)) or re.search(r'googletagmanager', str(i)) or re.search(r'index', str(i)) or re.search(r'autofillFSP', str(i)) or re.search(r'combined-intake', str(i)) or re.search(r'searchFormDesignCheck', str(i)):
            pass
        else:
            links.append(f'{home_url}/{i.get("src")}')

    for link in links:
        # link_gen = re.sub(r'https://', '/', link)
        script_content = requests.get(link).text

        # getting the scripts title from the last url's slug
        script_name = link.split('/')[-1]

        # writing the script to the file in script folder
        with open(os.path.join(path_script, f'{script_name}'), 'w', encoding="utf-8") as ft:
            ft.write(script_content)



def php_code_replacor(urlss):    
    # Below are the PHP code replacement
    home_replace = re.sub(r'"/"', '<?php echo home_url(); ?>', html_pages(urlss))

    default_replace = re.sub(r'href="/', 'href="<?php echo get_site_url(); ?>/', home_replace)

    script_replace = re.sub(r'(src="/design/scripts/)|(src="/includes/scripts/)|(src="/includes/)', 'src="<?php echo get_template_directory_uri(); ?>/js/', default_replace)

    image_replace = re.sub(r'src="/design/images', 'src="<?php bloginfo(\'template_url\'); ?>/images', script_replace)

    title_replace = 'page-title"><?php echo get_the_title(); ?>'

    page_title = re.sub(r'page-title">[a-zA-Z\s\w]*', title_replace, image_replace)

    article_replace = '''
    <article class="content" id="content">
    <?php
        wp_reset_query(); // necessary to reset query
        while ( have_posts() ) : the_post();
            the_content();
        endwhile; // End of the loop.
    ?>
    </article>
    '''
    article = re.sub(r'<article class="content"[a-zA-Z\=\"\s]*>[a-zA-Z\s\w\S]*</article>', article_replace, page_title)

    short_form_replace = '''
    <?php 
        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Side Bar") ) : 
    ?>
    <?php endif;?>
    '''

    shortform = re.sub(r'<div id="containerIntakeFormShortAutofill">[a-zA-Z\s\w\S]*</form>\s</div>', short_form_replace, article)

    footer_replace = '''
    </footer>
    <?php wp_footer(); ?>
    '''

    footer = re.sub(r'</footer>', footer_replace, shortform)

    body_replace = '<body class="<?php echo basename(get_permalink()); ?>'
    
    body = re.sub(r'<body class="', body_replace, footer)

    uns_code = re.sub(r'<script>var highlightOptions.*</script>', '', body)

    return uns_code


# scraping function for style
def style_scrap(urlss):
    css_url = f'{urlss}/design/css/site.css'
    css_style = requests.get(css_url).text
    css_style = str(css_style)
    font_replace = re.sub(r'url\("\.\./', 'url("', css_style)
    bg_replace = re.sub(r'url\(\.\./', 'url(', font_replace)
    return bg_replace

# tittle generator
def theme_gettor(urlss):
    scrapper_html = requests.get(urlss).text

    # The Scrapper default
    soup = BeautifulSoup(scrapper_html, 'lxml')
    theme_name = soup.find('title')

    return theme_name.decode_contents()

def font_awesome(urlss):
    scrapper_html = requests.get(urlss).text
    soup = BeautifulSoup(scrapper_html, 'lxml')
    styles_link = soup.findAll(attrs={'rel': 'stylesheet', 'href' : re.compile('https://fonts.googleapis.com/css*')})
    return styles_link[0]


def main():
    # Creating template for the pages
    # Default Page

    # Data i.e. needed for templates
    data_passed = [php_code_replacor(default_url), font_awesome(default_url)]

    # Default page
    template_default = env.get_template('default.html')
    output_default = template_default.render(data_passed = data_passed)

    # Index Page
    template_index = env.get_template('index.html')
    output_index = template_index.render(data_passed = data_passed)

    # CSS Styles
    css_data = [theme_gettor(home_url), style_scrap(home_url)]
    
    template_css = env.get_template('style.css')
    output_css = template_css.render(data = css_data)


    # Writing to the file
    with open(os.path.join(path_pages, 'default.php'), 'w', encoding="utf-8") as fp:
        fp.write(output_default)

    with open(os.path.join(path_pages, 'index.php'), 'w', encoding="utf-8") as fs:
        fs.write(output_index)

    with open(os.path.join(path_pages, 'style.css'), 'w', encoding="utf-8") as fc:
        fc.write(output_css)
    
    script_scrapper(home_url)

    html_img(home_url)

    css_img(home_url)

if __name__ == "__main__":
    main()
    print("Page has been scrapped successfully!!")
    
    # # Creating an automated Folder
    # class MyHandler(FileSystemEventHandler):
    #     def on_created(self, event):
    #         for filename in os.listdir(folder_track):
    #             src = folder_track + '/' + filename
    #             new_destination = folder_destination + '/' + filename
    #             os.rename(src, new_destination)
            

    # folder_track = r"C:\Final_scrapper\page_scrapper\wordpress"
    # folder_destination = r"C:\Users\U6078372\Desktop\wdw"
    # event_handler = MyHandler()
    # observer = Observer()
    # observer.schedule(event_handler, folder_track, recursive=True)
    # observer.start()

    # try:
    #     while True:
    #         time.sleep(10)
    # except KeyboardInterrupt:
    #     observer.stop()
    # observer.join()