const resultado = document.getElementById("resultado");
const opcao = document.getElementById('opcao');

const calculo = (op, a, b) => {
    switch (op) {
        case 1:
            opcao = a + b;
            break;
        case 2:
            opcao = a - b;
            break;
        case 3:
            opcao = a * b;
            break;
        case 4:
            opcao = a / b;
            break;
        default:
            break;
    }
}