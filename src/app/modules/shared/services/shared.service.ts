import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable()
export class SharedService {
  constructor(private httpClient: HttpClient) {}
}