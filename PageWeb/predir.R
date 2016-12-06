
  args <- commandArgs(TRUE)
 
  male <- args[1]
  age <- args[2]
  cigsPerDay <- args[3]
  totChol <- args[4]
  sysBP <- args[5]
  glucose <- args[6]

  male = c(male)
  age = c(age)
  cigsPerDay = c(cigsPerDay)
  totChol = c(totChol)
  sysBP = c(sysBP)
  glucose = c(glucose)

  Data = data.frame(male,age,cigsPerDay,totChol,sysBP,glucose)
  Framingham = read.csv("framingham.csv")
  FraminghamLog = glm(TenYearCHD ~ male + age + cigsPerDay + totChol + sysBP + glucose, data=Framingham, family=binomial)
  pred =  predict(FraminghamLog, newdata=Data, type="response")
  print(pred)
  sink("monfichier.txt")
  print(pred)
  print(head(iris))
  sink() 
