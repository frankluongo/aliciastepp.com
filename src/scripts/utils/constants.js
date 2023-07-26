export const COVER = "data-cover";
export const LIST_PAGE = "data-list-page";
export const THUMBNAIL = "data-thumbnail";
export const MEDIA_QUERY = `(min-width: 768px)`;

export const PHOTOS_UPDATE = "photosUpdate";
export const photosUpdate = new Event(PHOTOS_UPDATE, { bubbles: true });

export const PRINT_PDF = "printPDF";
export const printPDF = new Event(PRINT_PDF, { bubbles: true });

export const format = "?format=json";
