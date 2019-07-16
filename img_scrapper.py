from bs4 import BeautifulSoup
import requests
import re
import os
import shutil

# url = "http://rmnsts.firmsitepreview.com/design/images/p3.jpg"

# images = requests.get(url, stream=True)

# url = input('Enter the url to scrap images')
# print(url)

path_image = 'images/'

if not os.path.exists(path_image):
    os.makedirs(path_image)

def soup_source(urlss):
        img = requests.get(urlss).text

        img_soup = BeautifulSoup(img, 'lxml')

        return img_soup

def html_img(urlss):

        img = soup_source(urlss).find_all('img', attrs={ 'src': re.compile('/design/')})

        img_tag = []

        for i in img:
                img_tag.append(f"{urlss}{i.get('src')}")

        for image in img_tag:
                images = requests.get(image, stream=True)
                file_image_name = image.split('/')[-1]

        # print(image)

                with open(os.path.join(path_image, f'{file_image_name}'), 'wb') as fs:
                        shutil.copyfileobj(images.raw, fs)


# Getting CSS

def css_img(urlss):
        css_link = soup_source(urlss).find('link', attrs={'href': re.compile('site.css')})

        css_file = requests.get(f"{urlss}{css_link.get('href')}").text

        css_code = str(css_file)

        image_url = re.compile(r'/(images)/[a-zA-Z0-9\-]*\.(jpg|png|gif|tif)')

        matches = image_url.finditer(css_code)

        url_links_images = []

        for match in matches:
                url_links_images.append(f'{urlss}/design/{match.group()}')

        print(url_links_images)

        for image in url_links_images:
                images = requests.get(image, stream=True)
                file_image_name = image.split('/')[-1]


                with open(os.path.join(path_image, f'{file_image_name}'), 'wb') as fs:
                        shutil.copyfileobj(images.raw, fs)

# def main():
#         html_img(url)
#         css_img(url)

# if __name__ == "__main__":
#         main()