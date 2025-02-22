<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Document</title>
</head>
<style>
    * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
body {
  display: flex;
  justify-content: center;
  width: 100%;
  height: 100vh;
  background-color: #151317
}
.main {
  display: flex;
  position: relative;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  margin-top: 7rem;
  width: 70%;
  height: 65vh;
  border-radius: 1rem;
  box-shadow: 1px 1px 1px 4px RGB(139, 110, 56, 0.5);
  padding: 2%;
  background-color: #151317;
}
.main__box-image {
  position: relative;
  width: 100%;
  padding: 0;
}
.box-image__image {
  display: block;
  border-radius: 1rem;
  width: 100%;
  height: auto;
}
.box-image__overlay {
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: rgba(0, 0, 0, 0.4);
  border-radius: 1rem;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  transition: 0.3s ease 0.1s;
  opacity: 0;
}
.overlay__text {
  text-align: center;
  color: #d3c7aa;
  font-size: 30px;
  font-weight: 700;
}
.main__box-image:hover .box-image__overlay {
  opacity: 1;
}
.main__box-image:hover .main {
    height: 60%;
}
.main__text {
  opacity: 1;
  color: #d3c7aa;
  margin-top: 2rem;
}
</style>
<body>
  <main class="main">
    <div class="main__box-image">
      <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/universe_live/b824f0dbbab967b775a12053e3e5a912e5c3de5b-1920x653.jpg" alt="cachorro" class="box-image__image">
      <div class="box-image__overlay">
        <p class="overlay__text">Demacia</p>
      </div>
    </div>
    <p class="main__text">Um reino forte e legal com uma história militar de prestígio, o povo de Demacia sempre valorizou os ideais de justiça, honra e dever mais do que tudo, e é ferozmente orgulhoso de sua herança cultural. Mas, apesar desses princípios elevados, essa nação amplamente autossuficiente se tornou mais insular e isolacionista nos últimos séculos.
A capital, a Grande Cidade de Demacia, foi fundada como um refúgio da feitiçaria após o pesadelo das Guerras Rúnicas, e construída sobre o enigma da petricita — uma pedra branca peculiar que amortece a energia mágica. É daqui que a família real há muito tempo cuida da defesa das cidades e vilas periféricas, terras agrícolas, florestas e montanhas ricas em recursos minerais.</p>
  </main>
</body>
</html>