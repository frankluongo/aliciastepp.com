export function removePhotoFromArray({ src }) {
  window.photos = window.photos.filter((img) => img.src !== src);
}
