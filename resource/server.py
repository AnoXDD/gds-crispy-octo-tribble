from flask import Flask
app = Flask(__name__)

@app.route("/")
def hello():
	return "Hello UCSD GDS! This site is currently under construction."

@app.route("/about")
def about():
	return "About"

@app.route("/projects")
def projects():
	return "Projects"

@app.route("/members")
def members():
	return "Members"

@app.route("/calendar")
def calendar():
	return "Calendar"

@app.route("/ikabits")
def ikabits():
	return "Ikabits"

if __name__ == "__main__":
    	app.run(host ='0.0.0.0', port = 8000, debug=True)
