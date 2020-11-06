function toSubmit(element) {
    let _element = document.querySelector(element);

    if(!_element) {
        throw Error(`Not found element with attribute Id, class "${element}"`)
    }

    if(_element.nodeName !== "FORM") {
        throw Error(`The "${element}" is a node ${_element.nodeName}, not a node FORM html`);
    }

    // passed all validate
    _element.submit();
}

function confirmSubmit(message, element) {
    if(confirm(message || "Are you sure, bạn chắc chứ ? ")) {
        // call submit
        toSubmit(element);
    }
}

const Helpers = {
    toSubmit,
    confirmSubmit
}