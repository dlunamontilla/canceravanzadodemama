import { elemento } from "./elementos.js";

const menuHeader = () => {
  const logotipo = elemento("#logotipo-header"),
    navigation = elemento("#nav-header"),
    relleno = elemento("#relleno");

  if ( logotipo == null || navigation == null )
    return;

  if ( scrollY >= 100 ) {
    logotipo.classList.replace("logotipo--header", "logotipo--scroll");
    navigation.classList.add("navigation--scroll");
    
    // Temporal:
    if ( relleno !== null ) relleno.classList.add("relleno--scroll");
  }else {
    logotipo.classList.replace("logotipo--scroll", "logotipo--header");
    navigation.classList.remove("navigation--scroll");

    // Temporal:
    if ( relleno !== null) relleno.classList.remove("relleno--scroll");
  }
}

export { menuHeader };