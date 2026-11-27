from app import mysql

def selectAll():
    cursor= mysql.connection.cursor()
    cursor.execute("SELECT * FROM tb_alumnos WHERE state=1")
    result= cursor.fetchall() #Aqui se almacena la informacion que se obutvo de la cosulta
    cursor.close() #se cierra la conexion
    return result #se regresa la variable donde se guardó la informacion de la consulta, ya que esto es lo que retornara la funcion

#funcion para insertar
def insertarEstudiantes(nombre, carrera):
    cursor= mysql.connection.cursor()
    cursor.execute("INSERT INTO tb_alumnos(nombre,carrera) VALUES (%s,%s)",(nombre, carrera))
    mysql.connection.commit()#confirmacion de que se hizo el insert 
    cursor.close()

#funcion para eliminar(softdelete)
def softDeleteEstudiantes(id):
    cursor= mysql.connection.cursor()
    cursor.execute("UPDATE tb_alumnos SET state=0 WHERE id=%s",(id,))
    mysql.connection.commit()
    cursor.close()
    
#funcion para actualizar
def actualizarEstudiantes(id, nombre, carrera):
    cursor = mysql.connection.cursor()
    cursor.execute(
        "UPDATE tb_alumnos SET nombre = %s, carrera = %s WHERE id = %s",
        (nombre, carrera, id)
    )
    mysql.connection.commit()
    cursor.close()