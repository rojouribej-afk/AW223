/*  */
import Estudiante from "./Components/Estudiante";
import "./App.css";


export default function App(){

  const estudiantes = [
    {id: 1, nombre: "Jesus", carrera: "Sistemas"},
    {id: 2, nombre: "Alan", carrera: "Comercio"},
    {id: 3, nombre: "Omar", carrera: "Mecatronica"},

  ];
  return(

  <main className="contenedor">
    <h1>Listado de estudiantes</h1>
    <form action="">
      <input type="text" placeholder="Escribe el nombre"/>
      <input type="text" placeholder="Escribe la carrera"/>
      <button type="button">Agregar</button>
    </form>

  <h2> Estudiantes Registrados</h2>
  <ul>
    {estudiantes.map((estudiante)=>(

    <Estudiante
    key ={estudiante.id}
    estudiante={estudiante}
    />
    ))
    }
  </ul>
  <p> Total de estudiantes: {estudiantes.length} </p>

  </main>
  );
}