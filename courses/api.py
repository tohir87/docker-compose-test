# Course service

from flask import Flask
from flask_restful import Resource, Api

app = Flask(__name__)
api = Api(app)

class Course(Resource):
    def get(self):
        return {
            'courses' : ['Computing Science', 'Law', 'Accounting', 'Marketing', 'Mass Communication']
        }

api.add_resource(Course, '/')

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80, debug=True)
