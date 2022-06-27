"use strict";

class Validate {
    max(value, len) {
        return value.length < len;
    }
    min(value, len) {
        return value.length > len;
    }
    isNumber(value) {
        return /^\d+$/.test(value);
    }
}
function ProxyFactory(target){
    return new Proxy(target,{
        get(target,key){
            return target[key];
        },
        set(target,key,el){
            const rule = el.getAttribute("rule");
            const validate = new Validate();
            const state = rule.split(",").every(rule => {
                const info = rule.split(":");
                // console.log(info);
                return validate[info[0]](el.value,info[1]);
            });
            el.classList[state ? "remove" : "add"]('error');
            return true;
        },
    });
};
