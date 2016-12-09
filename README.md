# PredictHD
What we have done in the Hackathon organized by MLH and E-tech.

My Name is Hamza Boucherouite, and Carlson Tali and I worked on the second project, which consist of making a Machine learing algorithem to predict Heart Disease. 

The scheme of the project that we draw at first sight was as follows : 

When we started coding stuff at begining (Carl studies the model and I tried to elaborate an HTML form for the user), we realized that setting un  a web page and a server would take too much time (adding the fact we started the project at mid-time, I was slept the whole morning ! ;) ). Soufiane suggested that we use Microsoft Azure cloud services, which was crazy, because neither of us had used it before. At that moment, we switched missions : We decided that I work on configuring the webservice on Azure Machine Learning Studio, and Carl should transform my begginer's work on the form to a masterpiece (he did it actually !).

Because it is our first time with Azure, It took me some time to get used to it, discover that there is an "Execute R block" and uploading data, train the model... After some tesing (and some time, 1h 30 min to be exact), I discovered the other way arround, which was somehow easier : applying Azure basics (that were not that clear at first sight !). The experiment we created in Azure ML Studio is as follows :

![Train experiment](/images/CHD.PNG?raw=true "Train experiment on Azure ML Studio")

After some discovering, understanding and some more time, we succeeded at transorming it to a "Predictive" WebService (The quick start guide was alright, when watching it for the 11th time !) :

![Predctive experiment](/images/CHDExp.PNG?raw=true "Predictive experiment on Azure ML Studio")
