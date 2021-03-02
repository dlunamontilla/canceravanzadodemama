const evaluar = (objeto) => {
    return Object.prototype.toString.call(objeto);
}

const isLabel = (objeto) => {
    return evaluar(objeto) === "[object HTMLLabelElement]";
}

const isSelect = (objeto) => {
    return evaluar(objeto) === "[object HTMLSelectElement]";
}

const isForm = (objeto) => {
    return (evaluar) === "[object HTMLFormElement]";
}

export { isLabel, isSelect, isForm };