import { Injectable } from '@angular/core';
import { Http, URLSearchParams } from '@angular/http';
import 'rxjs/add/operator/map';

import {Observable} from 'rxjs';

@Injectable()
export class MediaItemService {

  data: any;
  constructor(private http: Http) {}

  get(medium): Observable<any> {
    let searchParams = new URLSearchParams();
    searchParams.append('medium', medium);



    this.data = this.http.get('http://laravel-angular2.app/api/mediaitems', { search: searchParams })
        .map(response=> response.json().mediaitems);

    console.log(this.data);

    return this.data;


  }
  
  add(mediaItem) {
    return this.http.post('http://laravel-angular2.app/api/add_item', mediaItem)
      .map(response => {});
  }
  
  delete(mediaItem) {
    return this.http.delete(`http://laravel-angular2.app/api/delete_item/${mediaItem.id}`)
      .map(response => {});
  }
}
