/******************************
 * FONCTIONS
 ******************************/
function refresh()
{
    const total = Number(purchaseAmountInput.value) + Number(workAmountInput.value);
    totalOutput.textContent = currencyFormatter.format(total);

    const percentage = (Number(workAmountInput.value) / total) * 100;
    workPercentageOutput.textContent = percentage.toFixed(2) + '%';
}

/******************************
 * CODE PRINCIPAL
 ******************************/
const purchaseAmountInput = document.getElementById('purchase-amount');
const workAmountInput = document.getElementById('work-amount');
const totalOutput = document.getElementById('total-amount');
const workPercentageOutput = document.getElementById('work-percentage');

const currencyFormatter = new Intl.NumberFormat('fr-FR', { style: 'currency', currency: 'EUR', maximumFractionDigits:0 });

for (const rangeInput of document.querySelectorAll('input[type="range"]')) {
    rangeInput.addEventListener('input', function (event) {
        const displayValueElt = document.querySelector(`[data-range="${this.id}"]`);
        displayValueElt.textContent = currencyFormatter.format(this.value);
        refresh();
    });
    
}
