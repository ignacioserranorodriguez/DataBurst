export interface RespuestaLogin
{
	exito:boolean,
	mensaje:string,
	token:string,

	id:number,
	mail: string,
	usuario: string,
	verificado: boolean,
	nombre: string,
	apellido_1: string,
	apellido_2: string,
	fechaNacimiento: string,
	pais: string,
	profesion: string,
	estudios: string,
	idioma: string,
	permiso:number
}