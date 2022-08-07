export default {
    methods: {
        replaceNumber: function (n) {
            if (n != undefined) {
                n = n.toString();
                const find = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
                const replace = ["۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹"];
                for (let i = 0; i < find.length; i++) {
                    n = n.replace(new RegExp(find[i], 'g'), replace[i]);
                }
                return n;
            }
        },
        number_format: function (num) {
            num = num == null ? 0 : num;
            num = num.toString();
            let format = '';
            let counter = 0;
            for (let i = num.length - 1; i >= 0; i--) {
                format += num[i];
                counter++;
                if (counter == 3 && i != 0) {
                    format += ",";
                    counter = 0;
                }
            }
            return format.split('').reverse().join('');
        },
        validate_email: function () {
            if (this.email.trim() == "") {
                this.email_error = "لطفا ایمیل خود را وارد نمایید";
                return false;
            } else if (!/^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/.test(this.email)) {
                this.email_error = 'ایمیل وارد شده معتبر نمی باشد';
                return false;
            } else {
                this.email_error = false;
                return true;
            }
        },
        validate_password: function (password_length) {
            const length = password_length == undefined ? 0 : password_length;
            if (this.password.toString().trim() == "") {
                this.password_error = 'لطفا کلمه عبور خود را وارد نمایید';
                return false;
            } else if (length > 0 && this.password.toString().trim().length < password_length) {
                const error = "کلمه عبور باید حداقل شامل " + password_length + " کاراکتر باشد";
                this.password_error = error;
                return false;
            } else {
                this.password_error = false;
                return true;
            }
        },
        validate_mobile: function () {
            if (this.mobile.toString().trim() == "") {
                this.mobile_error = 'لطفا شماره موبایل خود را وارد نمایید';
                return false;
            } else if (this.check_mobile_number()) {
                this.mobile_error = 'شماره موبایل وارد شده معتبر نمی باشد';
                return false;
            } else {
                this.mobile_error = false;
                return true;
            }
        },
        check_mobile_number() {
            if (isNaN(this.mobile)) {
                return true;
            } else {
                if (this.mobile.toString().trim().length == 11) {
                    if (this.mobile.toString().charAt(0) == '0' && this.mobile.toString().charAt(1) == '9') {
                        return false;
                    } else {
                        return true;
                    }
                } else if (this.mobile.toString().trim().length == 10) {
                    if (this.mobile.toString().charAt(0) == '9') {
                        return false;
                    } else {
                        return true;
                    }
                } else {
                    return true;
                }
            }
        },
        validate_field: function (label, field_name, field_error, field_length) {
            if (field_name.toString().trim().length == 0) {
                const text = 'لطفا ' + label + ' خود را وارد نمایید';
                this[field_error] = text;
                return false;
            } else if (field_length != undefined && field_name.trim().length < field_length) {
                const text = '' + label + ' باید حداقل شامل ' + field_length + ' کاراکتر باشد';
                this[field_error] = text;
                return false;
            } else {
                this[field_error] = false;
                return true;
            }
        },
        show_server_error: function () {
            this.server_error = true;
            const app = this;
            setTimeout(function () {
                app.server_error = false
            }, 5000);
        },
        get_cat_url: function (cat) {
            if (cat.search_url !== '' && cat.search_url !== undefined && cat.search_url !== null) {
                return cat.search_url;
            } else {
                return 'search/' + cat.url;
            }
        },
        logout: function () {
            localStorage.removeItem('token');
            localStorage.removeItem('expire_in');
            this.$router.push({name: 'login'});
        },
        gregorian_to_jalali: function (gy, gm, gd) {
            var g_d_m, jy, jm, jd, gy2, days;
            g_d_m = [0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334];
            if (gy > 1600) {
                jy = 979;
                gy -= 1600;
            } else {
                jy = 0;
                gy -= 621;
            }
            gy2 = (gm > 2) ? (gy + 1) : gy;
            days = (365 * gy) + (parseInt((gy2 + 3) / 4)) - (parseInt((gy2 + 99) / 100)) + (parseInt((gy2 + 399) / 400)) - 80 + gd + g_d_m[gm - 1];
            jy += 33 * (parseInt(days / 12053));
            days %= 12053;
            jy += 4 * (parseInt(days / 1461));
            days %= 1461;
            if (days > 365) {
                jy += parseInt((days - 1) / 365);
                days = (days - 1) % 365;
            }
            jm = (days < 186) ? 1 + parseInt(days / 31) : 7 + parseInt((days - 186) / 30);
            jd = 1 + ((days < 186) ? (days % 31) : ((days - 186) % 30));
            return [jy, jm, jd];
        },
        setHeader: function (image) {
            const token = localStorage.getItem('token');
            if (image) {
                return {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + token,
                        'Content-Type': 'multipart/form-data'
                    }
                };
            } else {
                return {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + token
                    }
                };
            }
        },
        validateImage: function () {
            if (this.image == '' && this.image_src == '') {
                this.errors.push('تصویر محصول را انتخاب نمایید');
                return false;
            } else if (this.image.size > 1024 * 1024) {
                this.errors.push('حجم تصویر باید حداکثر 1M باشد');
                return false;
            } else {
                return true;
            }
        },
        setAccountStatus: function (data) {
            if (data.error_access == 'ok') {
                this.account_status = data.account_status;
                localStorage.setItem('account_status', data.account_status);
                return false;
            } else {
                this.account_status = 'active';
                localStorage.setItem('account_status', 'active');
                return true;
            }
        },
        getDate: function (time, format) {
            time = time * 1000;
            const date = new Date(time);
            let r = '';
            const jalali = this.gregorian_to_jalali(date.getFullYear(), (date.getMonth() + 1), date.getDate());
            if (format == undefined) {
                r = this.replaceNumber(jalali[2]) + " " + this.monthName[(jalali[1] - 1)] + " " + this.replaceNumber(jalali[0]);
            } else {
                r = this.replaceNumber(jalali[0]) + "/" + this.replaceNumber(jalali[1]) + "/" + this.replaceNumber(jalali[2]);
            }
            return r;
        },
        getTime: function (time) {
            time = time * 1000;
            const date = new Date(time);
            let r = date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();
            return this.replaceNumber(r);
        },
        setCatch: function (error) {
            this.showLoading = false;
            if (error.response) {
                if (error.response.status == 401) {
                    this.logout();
                } else {
                    this.show_server_error();
                }
            } else {
                this.show_server_error();
            }
        },
        startTimer: function () {
            const app = this;
            this.timer = setInterval(function () {
                app.t = app.t - 1;
                let m = Math.floor(app.t / 60);
                let s = app.t - m * 60;
                if (s.toString().length == 1) {
                    s = "0" + s;
                }
                let text = app.replaceNumber("0" + m) + ":" + app.replaceNumber(s);
                if (app.t == 0) {
                    clearInterval(app.timer);
                    app.show_time = "";
                    app.timer = null;
                } else {
                    app.show_time = text;
                }
            }, 1000);
        },
    }
}