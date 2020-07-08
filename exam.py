import mysql.connector 
import paralleldots
paralleldots.set_api_key("dgIAkFZWCTGZvBQwM1gREhQr2Gdx51oaTkAG3Ti0sL8")
db = mysql.connector.connect(
    host = "localhost",
    user = "root",
    passwd = "",
    database="studentachievements"
)

mycursor = db.cursor()
## defining the Query
query = "SELECT * FROM s"

## getting records from the table
mycursor.execute(query)

## fetching all records from the 'cursor' object
records = mycursor.fetchall()

## Showing the data
for record in records:
    r=record
    #text="she is ugly"
    response=paralleldots.abuse(r)
    print(response)
    v=response['abusive']
    if(v>0.5):
     print("abusive")
print("Successful")
