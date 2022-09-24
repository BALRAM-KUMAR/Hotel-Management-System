#include <iostream>

using namespace std;
class complex
{
    int real;
    int img;
    public:
    
    
      istream & operator>>(istream &in)
      {
          in>>real;
          in>>img;
          return in;
      }
      ostream & operator<<(ostream &out)
      {
          out<<real<<endl;
          out<<img;
          return out;
      }
      
};

int main()
{
    complex c1;
      c1>>cin; 
      c1<<cout;
      return 0;
}