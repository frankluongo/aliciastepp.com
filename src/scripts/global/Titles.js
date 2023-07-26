export default function Titles() {
  const titles = Array.from(document.querySelectorAll("[data-title]"));
  const titlesText = titles.map((title) => title.innerText);

  function Title(title, i) {
    const words = titlesText[i].split(" ");
    const formattedTitle = words.join("<br />");
    title.innerHTML = formattedTitle;
  }

  function ResetTitle(title, i) {
    const words = titlesText[i].split(" ");
    title.innerText = words.join("");
  }

  function init() {
    titles.forEach(Title);
  }

  function reset() {
    titles.forEach(ResetTitle);
  }

  init();

  return { reset, init };
}
