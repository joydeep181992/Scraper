from bs4 import BeautifulSoup as bf
import requests
import os
import re

import asyncio

# users input for any firmsite url
url = input('Enter the URL')
main_url = f'{url}/Site-Map.shtml'

# specified path to folder
path = 'joy/project'

if not os.path.exists(path):
    os.makedirs(path)

# crawler to all the site file links

def scrap_content(url_passed):
    file = requests.get(url_passed).text

    soup = bf(file, 'lxml')

    for article in soup.find_all('article', class_="content"):
        links = article.find_all('a')

        links_list = []

        for href in links:
            href = str(href)
            links_list.append(href.split('\"')[1])

    return links_list


# The Content Scrapper
async def main(url_passed):
    list_of_links = scrap_content(url_passed)

    count = 0

    for links in list_of_links:
        site_files = requests.get(f'{url}/{links}').text

        soup_content = bf(site_files, 'lxml')

        page_title = soup_content.find('h1')
        content = soup_content.find('article', class_='content')

        file_name = links.replace('.shtml', '/').split('/')

        file_name = file_name[len(file_name)-2].replace('-', '_')

        count += 1

        with open(os.path.join(path, f'{file_name}.html'), 'w', encoding="utf-8") as fs:
            fs.write(str(page_title).replace("\n", "").replace("  ", ""))
            fs.write(str(content))

    print(count)
    print("All the pages has been crawled successfully!")


# contents_scrapper(main_url)

# print(header)

if __name__ == "__main__":
    loop = asyncio.get_event_loop()
    loop.run_until_complete(main(main_url))
    loop.close()

