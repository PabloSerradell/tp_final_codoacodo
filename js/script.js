var inputCantidad = document.getElementById('inputCantidad');
var spanTotalPagar = document.getElementById('spanTotalPagar');
var inputCategoria = document.getElementById('inputCategoria');

function Resumen(){
    if (inputCantidad.value < 0 || (inputCantidad.value != parseInt(inputCantidad.value))) {
        alert('Ingrese en "Cantidad" un número positivo y entero');
        spanTotalPagar.textContent = "Total a Pagar: $";
    }else{
        switch (inputCategoria.value){
            case 'Estudiante':
                spanTotalPagar.textContent = "Total a Pagar: $" + parseInt(inputCantidad.value) * 200 * 0.2;
            break;
            case 'Trainee':
                spanTotalPagar.textContent = "Total a Pagar: $" + parseInt(inputCantidad.value) * 200 * 0.5;
            break;
            case 'Junior':
                spanTotalPagar.textContent = "Total a Pagar: $" + parseInt(inputCantidad.value) * 200 * 0.85;
            break;
        }
    }
}

function Borrar(){
    inputCantidad.value = "";
    inputCategoria.value = "Estudiante";
    spanTotalPagar.textContent = "Total a Pagar: $";
}