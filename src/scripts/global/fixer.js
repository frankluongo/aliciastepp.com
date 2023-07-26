function fixer() {
  const sources = document.querySelectorAll("source");
  const images = document.querySelectorAll("img");
  sources.forEach((source) => {
    const srcset = source.srcset;
    source.srcset = srcset.replace(
      "https://alicia-stepp-photography.local",
      "https://aliciastepp.com"
    );
  });
  images.forEach((image) => {
    const src = image.src;
    image.src = src.replace(
      "https://alicia-stepp-photography.local",
      "https://aliciastepp.com"
    );
  });
}

fixer();
