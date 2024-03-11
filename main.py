from flask import Flask, render_template
from PySQLiteDBConnection import Connect


app = Flask(__name__)


@app.errorhandler(404)
def error_404(e):
    return render_template('404.html'), 404


@app.route('/')
def home():
    return render_template('home.html')


@app.route('/productos')
def products():
    db = Connect('./data/database.sqlite3')
    db.connect()
    products_table = db.read_table('productos')
    return render_template('products.html', productos=products_table)


if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0', port=5000)
