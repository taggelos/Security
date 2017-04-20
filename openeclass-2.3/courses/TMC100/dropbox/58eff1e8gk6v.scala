class Complex(real: Double, imaginary: Double) {
  def re = real;
  def im = imaginary;
}

class ComplexObj(real: Double, imaginary: Double, str: String)
            extends Complex(real, imaginary) {
  var myString = str;
  def setMyString(newString: String): Unit = myString = newString;
}



object ComplexNumbers {
	def main(args: Array[String]) {
	val c = new ComplexObj(1.2, 3.4, "axne")
	c.setMyString("22222")
	println(c.myString)
	println("imaginary part: " + c.im)
}
}
