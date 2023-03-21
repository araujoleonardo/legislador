let currentTab = 0;
const tabs = document.querySelectorAll('.tab');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const btnSubmit = document.getElementById('btnSubmit');
const regForm = document.getElementById('regForm');
const steps = document.querySelectorAll('.step');

showTab(currentTab);

function showTab(n) {
  tabs.forEach((tab, i) => {
    if (i === n) {
      tab.style.display = 'block';
    } else {
      tab.style.display = 'none';
    }
  });

  if (n === 0) {
    prevBtn.style.display = 'none';
  } else {
    prevBtn.style.display = 'inline';
  }

  if (n === tabs.length - 1) {
    nextBtn.style.display = 'none';
    btnSubmit.style.display = 'inline';
  } else {
    btnSubmit.style.display = 'none';
  }

  fixStepIndicator(n);
}

function nextPrev(n) {
  if (n === 1 && !validateForm()) return false;

  tabs[currentTab].style.display = 'none';

  currentTab += n;

  if (currentTab >= tabs.length) {
    regForm.submit();
    return false;
  }

  showTab(currentTab);
}

function validateForm() {
  const inputs = tabs[currentTab].querySelectorAll('input');
  let valid = true;

  inputs.forEach(input => {
    if (input.value === '') {
      input.classList.add('invalid');
      valid = false;
    }
  });

  if (valid) {
    steps[currentTab].classList.add('finish');
  }

  return valid;
}

function fixStepIndicator(n) {
  steps.forEach((step, i) => {
    if (i === n) {
      step.classList.add('active');
    } else {
      step.classList.remove('active');
    }
  });
}