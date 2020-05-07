# -*- coding: utf-8 -*-
from flask import Flask, render_template, request, redirect, url_for, flash
from flask_mysqldb import MySQL



app = Flask(__name__)
app.secret_key = 'many random bytes'

app.config['MYSQL_HOST'] = 'db4free.net'
app.config['MYSQL_USER'] = 'puentes123'
app.config['MYSQL_PASSWORD'] = 'puentes123'
app.config['MYSQL_DB'] = 'puentes'

mysql = MySQL(app)


@app.route('/')
def inicio():
    return render_template('inicio.php')

@app.route('/listado')
def listado():
    cur = mysql.connection.cursor()
    cur.execute("SELECT * FROM `registro_de_puentes`")
    data = cur.fetchall()
    cur.close()

    
    return render_template('listado.php',registro_de_puentes=data)

@app.route('/P_peatonal')
def P_peatonal():
    cur = mysql.connection.cursor()
    cur.execute("SELECT *FROM registro_de_puentes where tipo='PP1' OR tipo='PP2'")
    data = cur.fetchall()
    cur.close()
   
    return render_template('P_peatonal.php',registro_de_puentes=data)

@app.route('/P_vehicular')
def P_vehicular():
    cur = mysql.connection.cursor()
    cur.execute("SELECT *FROM registro_de_puentes where tipo='PV1' OR tipo='PV2'")
    data = cur.fetchall()
    cur.close()
    return render_template('P_vehicular.php',registro_de_puentes=data)

@app.route('/comuna')
def comuna():
    return render_template('comuna.php')

@app.route('/comuna1')
def comuna1():
    cur = mysql.connection.cursor()
    cur.execute("SELECT *FROM registro_de_puentes where comuna='1'")
    data = cur.fetchall()
    cur.close()
    return render_template('comuna1.php',registro_de_puentes=data)
    

@app.route('/comuna2')
def comuna2():
    cur = mysql.connection.cursor()
    cur.execute("SELECT *FROM registro_de_puentes where comuna='2'")
    data = cur.fetchall()
    cur.close()
    return render_template('comuna2.php',registro_de_puentes=data)

@app.route('/comuna3')
def comuna3():
    cur = mysql.connection.cursor()
    cur.execute("SELECT *FROM registro_de_puentes where comuna='3'")
    data = cur.fetchall()
    cur.close()
    return render_template('comuna3.php',registro_de_puentes=data)

@app.route('/comuna4')
def comuna4():
    cur = mysql.connection.cursor()
    cur.execute("SELECT *FROM registro_de_puentes where comuna='4'")
    data = cur.fetchall()
    cur.close()
    return render_template('comuna4.php',registro_de_puentes=data)

@app.route('/comuna5')
def comuna5():
    cur = mysql.connection.cursor()
    cur.execute("SELECT *FROM registro_de_puentes where comuna='5'")
    data = cur.fetchall()
    cur.close()
    return render_template('comuna5.php',registro_de_puentes=data)

@app.route('/comuna6')
def comuna6():
    cur = mysql.connection.cursor()
    cur.execute("SELECT *FROM registro_de_puentes where comuna='6'")
    data = cur.fetchall()
    cur.close()
    return render_template('comuna6.php',registro_de_puentes=data)

@app.route('/comuna7')
def comuna7():
    cur = mysql.connection.cursor()
    cur.execute("SELECT *FROM registro_de_puentes where comuna='7'")
    data = cur.fetchall()
    cur.close()
    return render_template('comuna7.php',registro_de_puentes=data)

@app.route('/comuna8')
def comuna8():
    cur = mysql.connection.cursor()
    cur.execute("SELECT *FROM registro_de_puentes where comuna='8'")
    data = cur.fetchall()
    cur.close()
    return render_template('comuna8.php',registro_de_puentes=data)

@app.route('/comuna9')
def comuna9():
    cur = mysql.connection.cursor()
    cur.execute("SELECT *FROM registro_de_puentes where comuna='9'")
    data = cur.fetchall()
    cur.close()
    return render_template('comuna9.php',registro_de_puentes=data)

@app.route('/comuna10')
def comuna10():
    cur = mysql.connection.cursor()
    cur.execute("SELECT *FROM registro_de_puentes where comuna='10'")
    data = cur.fetchall()
    cur.close()
    return render_template('comuna10.php',registro_de_puentes=data)
@app.route('/ver')
def ver():
    return render_template('ver.php')
"""@app.route('/db')
def db():
    MONGO_URI = 'mongodb+srv://puentes:puentes@cluster0-35b2j.mongodb.net/test?retryWrites=true&w=majority'
    client = MongoClient(MONGO_URI)

    db = client['puentes']
    collection = db['registro_de_puentes']
    results = collection.find({})
    for r in results:
    print(r)
    return render_template('db.html',results=results,collection=collection)
"""
if __name__ == '__main__':
    app.run(debug = True)

