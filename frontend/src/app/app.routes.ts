import { Routes } from '@angular/router';
import { InicioComponent } from './pages/inicio/inicio.component';
import { HomeComponent } from './pages/home/home.component';

export const routes: Routes = [

	{path:"inicio", component:InicioComponent},
	{path:"home", component:HomeComponent},
	{path:"", component:InicioComponent},
	{path:"**", component:InicioComponent}
];