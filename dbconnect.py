import mysql.connector 
import paralleldots
paralleldots.set_api_key("OPSGGEMEAGvn5yFMSLRtQYFYQ4dyZwkF9a4qfGGPFIg")
db = mysql.connector.connect(
    host = "localhost",
    user = "root",
    passwd = "",
    database="hackathon"
)

mycursor = db.cursor()
## defining the Query
query = "SELECT comment FROM usercomments"

## getting records from the table
mycursor.execute(query)

## fetching all records from the 'cursor' object
records = mycursor.fetchall()

## Showing the data
for record in records:
    r=record
    str=''.join(r)
    #text="she is ugly"
    response=paralleldots.abuse(r)
    #print(r)
    #print(response)
    v1=response['abusive']
    #if(v>0.5):
     #print("abusive")
     #db.commit()
    query1="update usercomments set v=%s where comment=%s"
    val=(v1,str)
    mycursor.execute(query1,val)
    #print(v);
    db.commit()

#print("Successful")
