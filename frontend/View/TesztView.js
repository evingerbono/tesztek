class TesztView {
    #adat = {};
    constructor(adat, szuloElemSelector) {
      this.#adat = adat;
      this.szuloElem = $(szuloElemSelector);
      console.log(this.#adat);
      this.tesztMegjelenit();
    }
 
    tesztMegjelenit(){
      let txt = "";
      this.#adat.forEach(teszt => {
          txt += `
            <div class="card mb-3">
              <div class="card-header">
                ${teszt.kerdes}
              </div>
              <div class="card-body">
                <div class="d-grid gap-2 d-md-block">
                  <button class="btn btn-outline-primary" type="button">${teszt.v1}</button>
                  <button class="btn btn-outline-primary" type="button">${teszt.v2}</button>
                  <br>
                  <button class="btn btn-outline-primary" type="button">${teszt.v3}</button>
                  <button class="btn btn-outline-primary" type="button">${teszt.v4}</button>
                </div>
              </div>
            </div>`;
        });
      this.szuloElem.html(txt);
    }
  }
  export default TesztView;
  