########predictHD

Framingham = read.csv("framingham.csv")
install.packages("caTools")

# Load the package:

library(caTools)

# Set our seed so we all get the same split

set.seed(88)

# Randomly split the data:

#spl = sample.split(Framingham$TenYearCHD, SplitRatio = 0.70)

#FraminghamTrain = subset(Framingham, spl == TRUE)
#FraminghamTest = subset(Framingham, spl == FALSE)

FraminghamLog = glm(TenYearCHD ~ male + age + cigsPerDay + totChol + sysBP + glucose, data=Framingham, family=binomial)


Intersecp = coef(FraminghamLog)[1]
male = coef(FraminghamLog)[2]
age= coef(FraminghamLog)[3]
cigsPerDay = coef(FraminghamLog)[4]
totChol = coef(FraminghamLog)[5]
sysBP = coef(FraminghamLog)[6]
glucose = coef(FraminghamLog)[7]

