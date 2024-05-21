var memory = "";
const TAX_RATE = 0.1;

function addNumber(value) {
    memory += value;
    updateDisplay();
}

function calculate(value) {
    memory += value;
}

function clearAll() {
    memory = "";
    updateDisplay();
}

function updateDisplay() {
    document.getElementById('display').value = memory;
}

function calculateTax() {
    memory *= (1 + TAX_RATE);
    memory = Math.round(memory);
    updateDisplay();
}

function calculateTotal() {
    memory = eval(memory);
    updateDisplay();
}