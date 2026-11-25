from flask import Blueprint

controladorAlumnoBP= Blueprint('controladorAlumno',__name__) 

@controladorAlumnoBP.route('/')
def inicio():
    return "Hola soy el backend de Alumno"


#ruta para inserts
@controladorAlumnoBP.route('/guardarAlumno' , methods=['POST'])
def guardar():
    return 'Se guardo el alumno'

#ruta para consultar todo, es con el metodo GET ya que es consulta. 
@controladorAlumnoBP.route('/consultartodo') #Aqui no lleva metodo ya que si no lleva es por default GET
def consultartodo():
    return 'Se consultó todo'

#ruta para actualizar, se utiliza el metodo PUT 
@controladorAlumnoBP.route('/actualizarAlumno' , methods=['PUT'])
def actualizar():
    return 'Se actualizó el alumno'

#ruta para eliminar, se utiliza el metodo DELETE
@controladorAlumnoBP.route('/eliminarAlumno' , methods=['DELETE'])
def eliminar():
    return 'Se eliminó el alumno'
