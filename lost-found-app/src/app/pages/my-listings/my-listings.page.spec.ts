import { ComponentFixture, TestBed } from '@angular/core/testing';
import { MyListingsPage } from './my-listings.page';

describe('MyListingsPage', () => {
  let component: MyListingsPage;
  let fixture: ComponentFixture<MyListingsPage>;

  beforeEach(() => {
    fixture = TestBed.createComponent(MyListingsPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
