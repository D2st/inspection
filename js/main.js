document.addEventListener('input', function (event) {
    if (event.target.tagName.toLowerCase() !== 'textarea') return;
    autoExpand(event.target);
}, false);

var autoExpand = function (field) {
    // Reset field height
    field.style.height = 'inherit';

    // Get the computed styles for the element
    var computed = window.getComputedStyle(field);

    // Calculate the height
    var height = parseInt(computed.getPropertyValue('border-top-width'), 10)
        + parseInt(computed.getPropertyValue('padding-top'), 10)
        + field.scrollHeight
        + parseInt(computed.getPropertyValue('padding-bottom'), 10)
        + parseInt(computed.getPropertyValue('border-bottom-width'), 10);

    field.style.height = height + 'px';
};

var calculateWH = function() {
    var weight = document.getElementsByName('weight')[0].value;
    var height = document.getElementsByName('height')[0].value / 100;
    if (weight == 0 || height == 0) {
        return;
    }
    var result = parseInt(weight) / Math.pow(parseFloat(height), 2);
    document.querySelector('.form__calculator__result').style.display = 'block'
    document.querySelector('.form__calculator__value').innerHTML = result.toFixed(1);
    document.getElementsByName('wh')[0].value = result.toFixed(1);
};

