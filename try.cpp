#include <iostream>

using namespace std;
class complex
{
    public:
    int real;
    int img;
      complex(int r,int i)
      {
         real=r;
         img=i;
      }
      complex operator+(complex c)
      {
         complex temp(0,0);
          temp.real=real+c.real;
          temp.img=img+c.img;
             return temp;
      }
      void display()
      {
          cout<<real<<endl<<img;
      }
      
};

int main()
{
    complex c1(9,9);
    complex c2(8,4);
    complex c3(0,0);
       c3=c1.operator+(c2);
      c3.display();
      return 0;
}