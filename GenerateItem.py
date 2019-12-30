import xlrd

lines = []
f = open("activity_details.php", 'r')  # your path!
for line in f:
    lines.append(line)

workbook = xlrd.open_workbook('items.xlsx')
print(workbook.sheet_names())  # 查看所有sheet
booksheet = workbook.sheet_by_index(0)  # 用索引取第一个sheet
for i in range(1, 61, 1):
    # 读单元格数据
    name = booksheet.cell_value(i, 1)
    time = booksheet.cell_value(i, 7)[2:]
    temp = time.split("/", 3)
    time = temp[0] + '年' + temp[1] + '月' + temp[2] + '日'

    host = booksheet.cell_value(i, 3).split("、", 1)[0]
    link = booksheet.cell_value(i, 17)
    intro = booksheet.cell_value(i, 4)

    lines[6] = name
    lines[16]='window.location.replace("./'+str(i)+'.php")'
    lines[75] = '"pic/' + str(i) + '.png"'
    lines[79] = name
    lines[82] = time
    lines[85] = host
    lines[88] = '"' + link + '"'
    lines[90] = link
    lines[122] = intro
    s = ''.join(lines)

    with open(str(i) + ".php", "w") as f:
        f.write(s)
