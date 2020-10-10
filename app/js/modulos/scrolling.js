import { elemento } from "./elementos.js";

const menuHeader = () => {
  const logotipo = elemento("#logotipo-header"),
    navigation = elemento("#nav-header");

  if ( logotipo == null || navigation == null )
    return;

  if ( scrollY >= 100 ) {
    logotipo.classList.replace("logotipo--header", "logotipo--scroll");
    navigation.classList.add("navigation--scroll");
  }else {
    logotipo.classList.replace("logotipo--scroll", "logotipo--header");
    navigation.classList.remove("navigation--scroll");
  }
}

export { menuHeader };