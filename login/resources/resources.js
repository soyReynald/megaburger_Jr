const hasAfter = selector => {
    const el = document.querySelector(selector);
    if(getComputedStyle(el, '::after').display == "none") {
        return false;
    } else {
        return true;
    }
}
