/* Fetching Dynamic Content */

fetch('https://example.com/api/content')
  .then(response => response.json())
  .then(data => {
    const title = data.title;
    const subtitle = data.subtitle;
    const image = data.image;
    const content = data.content;

    /* Updating HTML */

    document.querySelector('title').textContent = title;
    document.querySelector('h1').textContent = title;
    document.querySelector('h2').textContent = subtitle;
    document.querySelector('p').textContent = content;
    document.querySelector('img').src = image;

    /* Updating CSS */

    const sectionBackgroundColor = data.sectionBackgroundColor;
    const sectionBorderColor = data.sectionBorderColor;
    const sectionTextColor = data.sectionTextColor;

    const section = document.querySelector('section');

    section.style.backgroundColor = sectionBackgroundColor;
    section.style.borderColor = sectionBorderColor;
    section.style.color = sectionTextColor;

    /* Adding Dynamic Styles */

    const dynamicStyles = data.dynamicStyles;

    const style = document.createElement('style');
    style.textContent = dynamicStyles;
    document.head.appendChild(style);