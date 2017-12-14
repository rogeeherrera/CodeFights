int telephoneGame(String[] m) {
  int a = -1;
  for (int i = 1; i < m.length; i++) {
    if (!m[i].equals(m[i - 1])) {
      a = i;
      break;
    }  
  }
  return a;
}
