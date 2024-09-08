var bill = {
    items: {
      "Dosa": 20,
      "Idly": 7,
      "Parotta": 25,
      "Chappathi": 25,
      "Ghee-Roast":90 ,
    },
  
    hAdd: null,
    hItems: null,
    hList: null,
    hRow: null,
    hTotal: null,
    hPrint: null,
  
    init: () => {
      bill.hAdd = document.getElementById("billAdd");
      bill.hItems = document.getElementById("billItems");
      bill.hList = document.getElementById("itemList");
      bill.hRow = document.getElementById("itemRow").content;
      bill.hTotal = document.getElementById("billTotalAmt");
      bill.hPrint = document.getElementById("billPrint");
      bill.totalPrice = document.getElementById("totalPriceInput");
      bill.customerName = document.getElementById("idCustomerName");
      bill.customerNum = document.getElementById("idCustomerNum");
  
      for (let k of Object.keys(bill.items)) {
        let o = document.createElement("option");
        o.innerHTML = k;
        bill.hList.appendChild(o);
      }
  
      bill.hAdd.onclick = bill.add;
      bill.hPrint.onclick = bill.print;
    },
  
    add: () => {
      bill.hItems.insertBefore(bill.hRow.cloneNode(true), bill.hItems.firstChild);
      let row = bill.hItems.querySelector(".row"),
        qty = row.querySelector(".qty"),
        item = row.querySelector(".item"),
        price = row.querySelector(".price"),
        del = row.querySelector(".del");
  
      qty.onchange = bill.total;
      item.onchange = () => {
        if (bill.items[item.value]) {
          price.value = bill.items[item.value];
          bill.total();
        }
      };
      price.onchange = bill.total;
      del.onclick = () => bill.del(row);
    },
  
    del: (row) => {
      row.remove();
      bill.total();
    },
  
    total: () => {
      let all = bill.hItems.querySelectorAll(".row");
  
      if (all.length == 0) {
        bill.hTotal.innerHTML = 0;
        bill.hPrint.disabled = true;
      } else {
        let total = 0;
        for (let r of all) {
          let qty = +r.querySelector(".qty").value,
            price = +r.querySelector(".price").value;
          total += qty * price;
        }
        var finalAmount = total.toFixed(2);
        bill.hTotal.innerHTML = `Rs.${finalAmount}`;
        bill.totalPrice.value = finalAmount;
        bill.hPrint.disabled = false;
      }
    },
  };
  window.addEventListener("load", bill.init);
  