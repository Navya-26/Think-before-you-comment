import mysql.connector 
import paralleldots
import os
#paralleldots.set_api_key("OPSGGEMEAGvn5yFMSLRtQYFYQ4dyZwkF9a4qfGGPFIg")
import tweepy
from textblob import TextBlob
consumer_key='9oxabwyzJ5rgBqupbCkgPRBAL'
consumer_key_secret='vFuR0PzMx0Vg3UMWEgJwHweRHnrS8qYvGuniFWfiZQwZS1SANS'

access_token='1207282950355570688-812Co6K2R8LWNX1k7xbO2keFHQSQ6w'
access_token_secret='fHMlPbLuEGIjW2yXb814NGIuDbGkleNiVFeY6BYTAumpE'

auth=tweepy.OAuthHandler(consumer_key,consumer_key_secret)

auth.set_access_token(access_token,access_token_secret)
#public_tweets=api.search('modi')
 
api=tweepy.API(auth)
db = mysql.connector.connect(
    host = "localhost",
    user = "root",
    passwd = "",
    database="hackathon"
)

mycursor = db.cursor()
tweets = tweepy.Cursor(api.search, q='disha incident').items(100)

for tweet in tweets:
    analysis=TextBlob(tweet.text)
    print(tweet.text)
    print(analysis.sentiment)
    if analysis.sentiment[0]>0:
        print('Positive')
    elif analysis.sentiment[0]<0:
      #t=tweet.text
      #print(t)
      #q="v"
      #query="""INSERT INTO abusivecomments(badcomment) VALUES(%s)"""
      #val=(t)
      #mycursor.execute(query,val)
      #db.commit()
      print('negative')
    else:
      print('Neutral')
#print(t)
#db.commit()
