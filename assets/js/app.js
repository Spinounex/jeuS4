import '../styles/main.scss';

const imagesContext = require.context('../ressources', true, /\.(png|jpg|jpeg|gif|ico|svg|webp)$/);
imagesContext.keys().forEach(imagesContext);