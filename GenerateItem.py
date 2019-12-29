
import xlrd

workbook = xlrd.open_workbook('D:\\Py_exercise\\test_xlwt.xls')
print(workbook.sheet_names())  # 查看所有sheet
booksheet = workbook.sheet_by_index(0)  # 用索引取第一个sheet
for i in range (1,61,1):
    # 读单元格数据
    name=
    time=
    host=

    cell_11 = booksheet.cell_value(0 ,0)
    cell_21 = booksheet.cell_value(1 ,0)

    print(cell_11, cell_21, row_3)

    with open(str(i)+".html", "w") as f:
        f.write("这是个测试！")