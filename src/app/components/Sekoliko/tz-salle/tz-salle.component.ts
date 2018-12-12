import { Component, OnInit } from '@angular/core';
import {DataService} from '../../../shared/service/data.service';
import {urlList} from '../../../Utils/api/urlList';
import {ConstantHTTP} from '../../../Utils/ConstantHTTP';
import {Salle} from '../../../shared/model/Salle';
import {error} from "selenium-webdriver";

@Component({
  selector: 'app-tz-salle',
  templateUrl: './tz-salle.component.html',
  styleUrls: ['./tz-salle.component.scss']
})
export class TzSalleComponent implements OnInit {

  listSalle = [];
  dtOptions: DataTables.Settings = {};

  constructor(private dataService: DataService) { }

  ngOnInit() {

    this.getListSalle().subscribe((data: any) => {
      if (data.code === ConstantHTTP.CODE_SUCCESS){
        data.data.forEach((element: any) => {
          this.listSalle.push({
            id: (element.id).toString(),
            nom: element.nom,
          });
          console.log(this.listSalle);
        });
      }else {
        console.log("verifieo le function aloha papie a :D ")
      }
    });
  }
  getListSalle() {

   return this.dataService.post(urlList.path_list_salle);
  }

  /**
   * Touche pas
   */


}
