


<!-- PROJECT LOGO -->
<br/>
<p align="center">
  <a href="https://github.com/octaviobottari/Hydroponics-ABR">
    <img src="https://i.imgur.com/FX6p4Nv.png" alt="Logo" width="200" height="60">
  </a>

  <h3 align="center">Hidroponía ABR </h3>
  <h4 align="center">Automated and monitored hydroponics system</h4>

  <p align="center">
    Programmer:
    <br />
     <strong>Octavio Bottari - https://www.linkedin.com/in/octavio-bottari/</strong>
    <br />
    <br />
  </p>
</p>


<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary>Contents</summary>
  <ol>
    <li>
      <a href="#sobre-el-proyecto">About the project</a>
      <ul>
        <li><a href="#Programming languages">Programming languages</a></li>
      </ul>
    </li>
    <li>
      <a href="#client">Client</a>
      </li>
      <li>
      <a href="#server">Server</a>
      </li>
      <li>
      <a href="#web">Web</a>
      </li>
    <!-- <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li> -->
    <li><a href="#licencia">License</a></li>
    <li><a href="#contacto">Contact</a></li>
    <!-- <li><a href="#agradecimientos">Agradecimientos</a></li> -->
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## ABOUT THE PROJECT

**Hydroponics ABR (*Automated and monitored hydroponics system*)** This project is based on an automated and monitored system of a method of
cultivation of plants that instead of soil uses water to which nutrients are provided
chemicals, based on the NFT (Nutrient Film Technique) model, which is based on the
continuous or intermittent circulation of a thin sheet of nutrient solution through the
crop roots.
This system is sensed, and therefore can be automated, senses the pH and flow
of the water. In this system the same water is always used, changing it every 30 days,
circulating it with a pump, but so that the water lasts so long without
get acidic, you have to control the pH. If the water has a high or low pH, the system automatically adds its respective acid to correct the pH level, which must always be 7. The oxygen that the water needs will be provided by the constant flow provided by the
pump and jet that will fall from the tubes into the reservoir. The flow is sensed so that the user knows if the system is recirculating and oxygenating, on the contrary, the
plants. The minerals that the plant needs have to be applied in the reservoir, that is why our system will have a dropper that adds the acids to correct the pH and that will supply minerals every certain amount of time through a timer.
The objective of this project is the care of the environment, since the systems
Hydroponics are eco-friendly because the soil is not exploited and the lands are not seen
affected by chemicals (pesticides, herbicides, etc.) or overexploitation of the soil; Y
also that this system can be adapted in any type of space.


**Environmental Benefits**
* Saving water
* Makes it possible to produce in limiting environmental conditions
* No agrochemicals (herbicides, pesticides, fungicides and nematicides) are used.
* High-quality crops
* Do not use of fertilizers and fertilizers
* End land overexploitation
* Minimal problem with Weeds


## Client
What the client does is sensing with his and based on a bad measure of what he sensed, correcting it with the automation that was programmed. The Client data is sent to the server with sockets, in that package that it sends contains the measurements of the sensors, the username and the password that was written before using the system. So when the server receives the data from the Client, it knows who it belongs to.

## Server
The server receives the Customer's data and saves everything in a database.
When the server receives a measurement that is bad for the plants, it automatically sends an email to the user of said system.

## Web
In order to see the data that was saved in the database, PHP was used and it was used for this:
First, the user logs in with his account already obtained before, uploads his email to the profile and is ready to receive any type of alert.
Second, on the web there is a monitoring of the data that is in the database that is refreshed with AJAX to always be able to see the latest data that arrives.

Third, there is a section called My progress, which is where week by week you upload photos of how the plants grow.


### Programming languages


* [PHP]
* [Python]
* [JavaScript]
* [HTML]
* [Css]



<!-- GETTING STARTED -->
<!-- ## Getting Started
This is an example of how you may give instructions on setting up your project locally.
To get a local copy up and running follow these simple example steps.
### Prerequisites
This is an example of how to list things you need to use the software and how to install them.
* npm
  ```sh
  npm install npm@latest -g
  ```
### Installation
1. Get a free API Key at [https://example.com](https://example.com)
2. Clone the repo
   ```sh
   git clone https://github.com/your_username_/Project-Name.git
   ```
3. Install NPM packages
   ```sh
   npm install
   ```
4. Enter your API in `config.js`
   ```JS
   const API_KEY = 'ENTER YOUR API';
   ``` -->
<!-- LICENSE -->
## License

Distributed under the GNU General Public License v3.0.

<!-- CONTACTO -->
## Contact

Octavio Bottari - [Linkedin](https://www.linkedin.com/in/octavio-bottari/) - octaviobottari7@gmail.com

Project link: [github.com/octaviobottari/Hydroponics-ABR](https://github.com/octaviobottari/Hydroponics-ABR)



<!-- ACKNOWLEDGEMENTS -->
<!-- ## Acknowledgements
* [GitHub Emoji Cheat Sheet](https://www.webpagefx.com/tools/emoji-cheat-sheet)
* [Img Shields](https://shields.io)
* [Choose an Open Source License](https://choosealicense.com)
* [GitHub Pages](https://pages.github.com)
* [Animate.css](https://daneden.github.io/animate.css)
* [Loaders.css](https://connoratherton.com/loaders)
* [Slick Carousel](https://kenwheeler.github.io/slick)
* [Smooth Scroll](https://github.com/cferdinandi/smooth-scroll)
* [Sticky Kit](http://leafo.net/sticky-kit)
* [JVectorMap](http://jvectormap.com)
* [Font Awesome](https://fontawesome.com)
 -->




<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/othneildrew/Best-README-Template.svg?style=for-the-badge
[contributors-url]: https://github.com/othneildrew/Best-README-Template/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/othneildrew/Best-README-Template.svg?style=for-the-badge
[forks-url]: https://github.com/othneildrew/Best-README-Template/network/members
[stars-shield]: https://img.shields.io/github/stars/othneildrew/Best-README-Template.svg?style=for-the-badge
[stars-url]: https://github.com/othneildrew/Best-README-Template/stargazers
[issues-shield]: https://img.shields.io/github/issues/othneildrew/Best-README-Template.svg?style=for-the-badge
[issues-url]: https://github.com/othneildrew/Best-README-Template/issues
[license-shield]: https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge
[license-url]: https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/othneildrew
