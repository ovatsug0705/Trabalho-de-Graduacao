class Search {
  constructor(){
    this.form = document.querySelector('[data-search]');
    this.elm = document.querySelector('[data-search-input]');
    this.elm2 = document.querySelector('[data-search-close]');
    this.isSubmited = true;
    this.setupListeners()
  }

  setupListeners(){
    this.form.addEventListener('submit', (evt)=> this.validateSearch(evt));
    this.elm.addEventListener('focus', ()=> this.elm2.classList.remove('hide'));
    this.elm2.addEventListener('click', (evt)=> this.clearInput(evt));
  }

  clearInput(evt){
    evt.preventDefault();
    this.elm.value = null;
    this.elm2.classList.add('hide');
  }

  validateSearch(evt){
    if(this.isSubmited) evt.preventDefault();
    if(this.elm.value != '' && this.elm.value != ' ' && this.isSubmited) {
      this.isSubmited = false;
      this.form.dispatchEvent(new Event('submit'));
    }
  }
}

export default {
  create(){
    new Search();
  }
}