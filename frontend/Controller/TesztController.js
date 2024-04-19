import SzuresView from "../View/SzuresView.js";
import TesztView from "../View/TesztView.js";
import TesztModel from "../Model/TesztModel.js";
import DataService from "../Model/dataService.js";
class TesztController{
    constructor(){
        this.dataService = new DataService();
        this.megjenitSzures();
        this.megjelenitTesztek();
    }
    async megjenitSzures(){
        await this.dataService.getData("/api/kategoriaId", (adatok) => {
            const model = new TesztModel(adatok);
            new SzuresView(model.getAdat(),  $(".szures")[0]);
          });
    }
    async megjelenitTesztek() {
        await this.dataService.getData("/api/tesztek", (adatok) => {
          const model = new TesztModel(adatok);
          new TesztView(model.getAdat(), ".tesztek");
        });
      }
     
}
export default TesztController;