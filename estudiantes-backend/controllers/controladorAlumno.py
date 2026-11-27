from flask import Blueprint, request, jsonify #Estas son para las respuestas y las peticiones a la bd
from Models.modelEstudiante import * #el asterisco es para importar todos los metodos(funciones) que tenemos, como delete, etc.

controladorAlumnoBP= Blueprint('controladorAlumno',__name__) 

@controladorAlumnoBP.route('/')
def inicio():
    return "Hola soy el backend de Alumno"


#ruta para inserts
@controladorAlumnoBP.route('/guardarAlumno' , methods=['POST'])
def guardar():
    nombreReq= request.form.get('txtNombre','').strip()#Strip es para quitar espacios a la izq o dere del nombre o variable
    carreraReq= request.form.get('txtCarrera','').strip()
    
    try: 
        insertarEstudiantes(nombreReq,carreraReq)
        return jsonify({"Completado":"Estudiante Guardado"}),200
    
    except Exception as e:
        return jsonify({"Error": str(e)}),500




#ruta para consultar todo, es con el metodo GET ya que es consulta. 
@controladorAlumnoBP.route('/consultartodo') #Aqui no lleva metodo ya que si no lleva es por default GET
def consultartodo():
    try:
        alumnos = selectAll()
        return  jsonify(alumnos) ,200;
    except Exception as e:
        print({"Error": str(e)}), 500
    


#ruta para actualizar
@controladorAlumnoBP.route('/actualizarAlumno' , methods=['PUT'])
def actualizar():
    id = request.form.get('id', '').strip()
    nombreReq = request.form.get('txtNombre', '').strip()
    carreraReq = request.form.get('txtCarrera', '').strip()

    if not id or not nombreReq or not carreraReq:
        return jsonify({"Error": "Faltan datos"}), 400

    try:
        actualizarEstudiantes(id, nombreReq, carreraReq)
        return jsonify({"Completado": "Alumno Actualizado"}), 200
    except Exception as e:
        return jsonify({"Error": str(e)}), 500
        




#ruta para eliminar, se utiliza el metodo DELETE
@controladorAlumnoBP.route('/eliminarAlumno' , methods=['PUT'])
def eliminar():
    id = request.form.get('id', '').strip()
    
    try:
        softDeleteEstudiantes(id)
        return jsonify({"Completado": "Alumno Borrado"}),200
    except Exception as e:
        return jsonify({"Error": str(e)}), 500
        
