export default {
    methods:{
        checkMobileNumber:function(value){
            if(isNaN(value))
            {
                return  'شماره موبایل وارد شده معتبر نمی باشد';
            }
            else {
                if(value.toString().trim().length==11)
                {
                    if(value.toString().charAt(0)=='0' && value.toString().charAt(1)=='9' )
                    {
                        return true;
                    }
                    else
                    {
                        return  'شماره موبایل وارد شده معتبر نمی باشد';
                    }
                }
                else if(value.toString().trim().length==10)
                {
                    if(value.toString().charAt(0)=='9')
                    {
                        return true;
                    }
                    else
                    {
                        return  'شماره موبایل وارد شده معتبر نمی باشد';
                    }
                }
                else{
                    return  'شماره موبایل وارد شده معتبر نمی باشد';
                }
            }
        },
        counter:function () {
            let second=this.show_second;
            if(second>-1){
                 let h=Math.floor(second/3600);
                 second=second-h*3600;
                 let m=Math.floor(second/60);
                 let s=second-m*60;
                 if(h.toString().length==1)
                 {
                     h="0"+h;
                 }
                 if(m.toString().length==1)
                 {
                     m="0"+m;
                 }
                 if(s.toString().length==1)
                 {
                     s="0"+s;
                 }
                 this.h=this.replaceNumber(h);
                 this.m=this.replaceNumber(m);
                 this.s=this.replaceNumber(s);
                 this.show_second=this.show_second-1;
            }
            else{
                clearTimeout(this.timeOut);
            }
        },
        replaceNumber:function (n) {
            n=n.toString();
            const find=["0","1","2","3","4","5","6","7","8","9"];
            const replace=["۰","۱","۲","۳","۴","۵","۶","۷","۸","۹"];
            for (let i=0;i<find.length;i++)
            {
                n=n.replace(new RegExp(find[i],'g'),replace[i]);
            }
            return n;
        }
    }
}
