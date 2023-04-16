function validarCPF(cpf) {
    cpf = cpf.replace(/[^\d]+/g, ''); // remove qualquer caractere que não seja número
    if (cpf.length !== 11 || /^(\d)\1{10}$/.test(cpf)) {
      return false; // CPF deve ter 11 dígitos e não pode ter todos os números iguais
    }
    var sum = 0, remainder;
    for (var i = 1; i <= 9; i++) {
      sum += parseInt(cpf.substring(i - 1, i)) * (11 - i);
    }
    remainder = (sum * 10) % 11;
    if ((remainder === 10) || (remainder === 11)) {
      remainder = 0;
    }
    if (remainder !== parseInt(cpf.substring(9, 10))) {
      return false; // o primeiro dígito verificador está incorreto
    }
    sum = 0;
    for (var i = 1; i <= 10; i++) {
      sum += parseInt(cpf.substring(i - 1, i)) * (12 - i);
    }
    remainder = (sum * 10) % 11;
    if ((remainder === 10) || (remainder === 11)) {
      remainder = 0;
    }
    if (remainder !== parseInt(cpf.substring(10, 11))) {
      return false; // o segundo dígito verificador está incorreto
    }
    cpf = cpf.substring(0, 3) + '.' + cpf.substring(3, 6) + '.' + cpf.substring(6, 9) + '-' + cpf.substring(9, 11);
    return cpf; // retorna o CPF formatado (000.000.000-00) se for válido, caso contrário retorna false
}